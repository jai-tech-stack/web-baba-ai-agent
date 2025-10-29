"""
Web Baba AI Chatbot Backend
Flask application for handling chatbot interactions and lead capture
"""

from flask import Flask, request, jsonify
from flask_cors import CORS
import os
import json
import openai
from datetime import datetime
import gspread
from google.oauth2.service_account import Credentials
from config import OPENAI_API_KEY, GOOGLE_SHEET_ID, GOOGLE_SHEET_CREDS

app = Flask(__name__)
CORS(app)

# Configure OpenAI
openai.api_key = OPENAI_API_KEY

# Memory file path
MEMORY_FILE = 'data/memory.json'

# Ensure data directory exists
os.makedirs('data', exist_ok=True)

def load_memory():
    """Load conversation memory from JSON file"""
    if os.path.exists(MEMORY_FILE):
        try:
            with open(MEMORY_FILE, 'r') as f:
                return json.load(f)
        except:
            return {}
    return {}

def save_memory(memory_data):
    """Save conversation memory to JSON file"""
    try:
        with open(MEMORY_FILE, 'w') as f:
            json.dump(memory_data, f, indent=2)
    except Exception as e:
        print(f"Error saving memory: {e}")

def get_user_memory(user_id):
    """Get memory for a specific user"""
    memory = load_memory()
    return memory.get(user_id, {})

def update_user_memory(user_id, data):
    """Update memory for a specific user"""
    memory = load_memory()
    if user_id not in memory:
        memory[user_id] = {}
    memory[user_id].update(data)
    memory[user_id]['last_updated'] = datetime.now().isoformat()
    save_memory(memory)

def offline_fallback(message):
    """Fallback responses when API is unavailable"""
    message_lower = message.lower()
    
    if "service" in message_lower or "offer" in message_lower:
        return "We offer custom website design and development, e-commerce solutions, branding, digital marketing, and mobile-responsive designs. Everything delivered in 48 hours! 🚀"
    
    elif "quote" in message_lower or "price" in message_lower or "cost" in message_lower:
        return "Our pricing starts at ₹19,999 for a 5-page website. We offer three packages: Starter (₹19,999), Professional (₹45,000), and Enterprise (₹75,000). Would you like more details about any specific package?"
    
    elif "design" in message_lower or "build" in message_lower or "create" in message_lower:
        return "Absolutely! We design and build custom websites tailored to your business. Our team handles everything from design to development in just 48 hours. Want to discuss your project?"
    
    elif "time" in message_lower or "long" in message_lower or "delivery" in message_lower:
        return "We deliver custom websites in just 48 hours! No templates, just professional, tailored results. Ready to get started?"
    
    elif "technolog" in message_lower or "stack" in message_lower or "use" in message_lower:
        return "We use modern technologies: HTML5, CSS3, JavaScript, responsive frameworks, and SEO-optimized development. All sites are mobile-friendly and performance-focused!"
    
    elif "work" in message_lower or "start" in message_lower or "interested" in message_lower:
        return "That's great! To help you get started, I'd love to learn more about your project. Can you share your name and email so we can discuss your requirements?"
    
    else:
        return "I'm here to help with website design, development, quotes, and project planning. Could you tell me more about what you're looking for?"

def detect_lead_intent(message):
    """Detect if user wants to work with Web Baba"""
    intent_keywords = [
        'interested', 'want', 'need', 'get started', 'quote', 'hire', 'work',
        'project', 'build', 'design', 'website', 'yes', 'sure', 'contact',
        'email', 'phone', 'call'
    ]
    message_lower = message.lower()
    return any(keyword in message_lower for keyword in intent_keywords)

def generate_ai_response(user_message, user_id, conversation_history):
    """Generate AI response using OpenAI API with fallback"""
    
    try:
        # Get user memory
        user_memory = get_user_memory(user_id)
        user_name = user_memory.get('name', 'friend')
        
        # Build context for AI
        context = f"""You are the Web Baba Assistant, a friendly and confident AI consultant for Web Baba - a web development company that delivers custom websites in 48 hours.

Company Info:
- Website: webbaba.com
- Services: Custom website design, e-commerce, branding, digital marketing
- Pricing: Starter (₹19,999), Professional (₹45,000), Enterprise (₹75,000)
- Delivery: 48 hours for most projects
- USP: Fast delivery without compromising quality, no templates

Your personality:
- Friendly, confident, helpful like a tech consultant
- Proactive in understanding needs
- Professional but approachable
- Focus on helping users understand what Web Baba offers

User Information:
- Name: {user_name}
- Previous context: {user_memory.get('context', 'First time visitor')}

Guidelines:
1. Greet returning users by name if you have it
2. Answer questions about services, pricing, delivery time, technologies
3. If user shows intent to work with Web Baba, ask for their name and email naturally
4. Be enthusiastic about the 48-hour delivery promise
5. Keep responses concise and helpful
6. Don't reveal internal processes - focus on benefits

Conversation history:
{json.dumps(conversation_history[-5:], indent=2)}

User message: {user_message}
AI response:"""

        response = openai.ChatCompletion.create(
            model="gpt-3.5-turbo",
            messages=[
                {"role": "system", "content": context},
                {"role": "user", "content": user_message}
            ],
            max_tokens=200,
            temperature=0.7
        )
        
        ai_response = response.choices[0].message.content.strip()
        return ai_response
        
    except Exception as e:
        print(f"OpenAI API error: {e}")
        # Fallback to offline responses
        return offline_fallback(user_message)

def save_to_google_sheets(lead_data):
    """Save lead information to Google Sheets"""
    try:
        # Parse credentials from config
        creds_json = json.loads(GOOGLE_SHEET_CREDS)
        scope = ['https://spreadsheets.google.com/feeds',
                 'https://www.googleapis.com/auth/drive']
        creds = Credentials.from_service_account_info(creds_json, scopes=scope)
        client = gspread.authorize(creds)
        
        # Open the sheet
        sheet = client.open_by_key(GOOGLE_SHEET_ID).sheet1
        
        # Append row
        row = [
            lead_data.get('name', ''),
            lead_data.get('email', ''),
            lead_data.get('phone', ''),
            lead_data.get('message', ''),
            lead_data.get('project_type', ''),
            datetime.now().strftime('%Y-%m-%d %H:%M:%S')
        ]
        sheet.append_row(row)
        return True
    except Exception as e:
        print(f"Google Sheets error: {e}")
        return False

@app.route('/chat', methods=['POST'])
def chat():
    """Handle chatbot messages"""
    try:
        data = request.json
        user_message = data.get('message', '')
        user_id = data.get('user_id', 'anonymous')
        
        # Load conversation history
        memory = load_memory()
        conversation_history = memory.get(user_id, {}).get('conversation', [])
        
        # Generate AI response
        ai_response = generate_ai_response(user_message, user_id, conversation_history)
        
        # Update conversation history
        conversation_history.append({'role': 'user', 'content': user_message})
        conversation_history.append({'role': 'assistant', 'content': ai_response})
        
        # Keep only last 10 messages to manage memory
        conversation_history = conversation_history[-10:]
        
        # Update user memory
        update_user_memory(user_id, {'conversation': conversation_history})
        
        # Check for lead intent
        is_interested = detect_lead_intent(user_message)
        
        # Extract name and email if mentioned
        user_memory = get_user_memory(user_id)
        if not user_memory.get('name'):
            # Simple extraction (can be enhanced)
            if 'name is' in user_message.lower() or 'i am' in user_message.lower():
                name_parts = user_message.lower().split('name is')
                if len(name_parts) > 1:
                    potential_name = name_parts[1].strip().split()[0]
                    if potential_name:
                        update_user_memory(user_id, {'name': potential_name.capitalize()})
        
        return jsonify({
            'response': ai_response,
            'needs_lead_info': is_interested and not user_memory.get('email'),
            'user_name': user_memory.get('name')
        })
        
    except Exception as e:
        print(f"Error in /chat: {e}")
        return jsonify({
            'response': offline_fallback(user_message),
            'needs_lead_info': False
        }), 500

@app.route('/lead', methods=['POST'])
def save_lead():
    """Save lead information to Google Sheets"""
    try:
        lead_data = request.json
        user_id = lead_data.get('user_id', 'anonymous')
        
        # Update user memory with lead info
        update_user_memory(user_id, {
            'name': lead_data.get('name'),
            'email': lead_data.get('email'),
            'phone': lead_data.get('phone'),
            'project_type': lead_data.get('project_type', ''),
            'is_lead': True
        })
        
        # Save to Google Sheets
        success = save_to_google_sheets(lead_data)
        
        if success:
            return jsonify({
                'success': True,
                'message': 'Thank you! We\'ll contact you soon.'
            })
        else:
            # Still return success if memory saved, even if Sheets fails
            return jsonify({
                'success': True,
                'message': 'Thank you! Your information has been saved.'
            })
            
    except Exception as e:
        print(f"Error in /lead: {e}")
        return jsonify({
            'success': True,
            'message': 'Thank you! We received your information.'
        }), 200

@app.route('/health', methods=['GET'])
def health_check():
    """Health check endpoint"""
    return jsonify({'status': 'healthy'}), 200

if __name__ == '__main__':
    port = int(os.environ.get('PORT', 5000))
    debug = os.environ.get('FLASK_ENV') == 'development'
    
    print("🚀 Web Baba Chatbot Server Starting...")
    print(f"📊 API Server: http://localhost:{port}")
    print("💬 Chatbot ready to handle conversations!")
    
    app.run(debug=debug, host='0.0.0.0', port=port)

