/**
 * Web Baba AI Chatbot Frontend
 * Embedded chat widget for any website
 */

class WebBabaChatbot {
    constructor(config = {}) {
        this.apiUrl = config.apiUrl || 'https://web-production-98b93.up.railway.app';
        this.userId = this.getUserId();
        this.isOpen = false;
        this.isLeadFormVisible = false;
        this.conversation = [];
        this.userName = '';
        
        this.init();
    }

    getUserId() {
        // Get or create user ID from localStorage
        let userId = localStorage.getItem('webbaba_chatbot_user_id');
        if (!userId) {
            userId = 'user_' + Date.now() + '_' + Math.random().toString(36).substr(2, 9);
            localStorage.setItem('webbaba_chatbot_user_id', userId);
        }
        return userId;
    }

    init() {
        this.createWidget();
        this.loadConversation();
        this.addEventListeners();
    }

    createWidget() {
        // Create widget container
        const widget = document.createElement('div');
        widget.id = 'webbaba-chatbot';
        widget.innerHTML = `
            <div class="chatbot-toggle" id="chatbotToggle">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                </svg>
                <span class="close-icon">×</span>
            </div>
            
            <div class="chatbot-window" id="chatbotWindow">
                <div class="chatbot-header">
                    <div class="chatbot-title">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                        </svg>
                        Web Baba Assistant
                    </div>
                    <button class="chatbot-minimize" id="chatbotMinimize">×</button>
                </div>
                
                <div class="chatbot-messages" id="chatbotMessages">
                    <div class="message bot">
                        <div class="message-content">
                            <div class="avatar bot-avatar">WB</div>
                            <div class="message-bubble">
                                👋 Hi! I'm the Web Baba Assistant. How can I help you today?
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="chatbot-lead-form" id="leadForm">
                    <div class="lead-form-content">
                        <h3>Let's get started!</h3>
                        <p>Tell us a bit about yourself:</p>
                        <input type="text" id="leadName" placeholder="Your Name" required>
                        <input type="email" id="leadEmail" placeholder="Your Email" required>
                        <input type="tel" id="leadPhone" placeholder="Phone (optional)">
                        <textarea id="leadMessage" placeholder="Project details (optional)"></textarea>
                        <div class="lead-form-actions">
                            <button id="skipLeadBtn">Skip</button>
                            <button id="submitLeadBtn">Send</button>
                        </div>
                    </div>
                </div>
                
                <div class="chatbot-input-area">
                    <input type="text" id="chatInput" placeholder="Type your message...">
                    <button id="sendBtn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="22" y1="2" x2="11" y2="13"></line>
                            <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                        </svg>
                    </button>
                </div>
            </div>
        `;
        
        document.body.appendChild(widget);
    }

    addEventListeners() {
        // Toggle chatbot
        document.getElementById('chatbotToggle').addEventListener('click', () => {
            this.toggleChatbot();
        });

        // Minimize chatbot
        document.getElementById('chatbotMinimize').addEventListener('click', () => {
            this.toggleChatbot();
        });

        // Send message
        document.getElementById('sendBtn').addEventListener('click', () => {
            this.sendMessage();
        });

        document.getElementById('chatInput').addEventListener('keypress', (e) => {
            if (e.key === 'Enter') {
                this.sendMessage();
            }
        });

        // Lead form actions
        document.getElementById('submitLeadBtn').addEventListener('click', () => {
            this.submitLead();
        });

        document.getElementById('skipLeadBtn').addEventListener('click', () => {
            this.hideLeadForm();
        });
    }

    toggleChatbot() {
        const window = document.getElementById('chatbotWindow');
        const toggle = document.getElementById('chatbotToggle');
        
        this.isOpen = !this.isOpen;
        
        if (this.isOpen) {
            window.style.display = 'flex';
            toggle.classList.add('open');
        } else {
            window.style.display = 'none';
            toggle.classList.remove('open');
        }
    }

    async sendMessage() {
        const input = document.getElementById('chatInput');
        const message = input.value.trim();
        
        if (!message) return;
        
        // Add user message to UI
        this.addMessage(message, 'user');
        input.value = '';
        
        // Show typing indicator
        this.showTypingIndicator();
        
        try {
            // Send to backend
            const response = await fetch(`${this.apiUrl}/chat`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    message: message,
                    user_id: this.userId
                })
            });
            
            const data = await response.json();
            
            // Hide typing indicator
            this.hideTypingIndicator();
            
            // Add bot response
            this.addMessage(data.response, 'bot');
            
            // Check if we need lead info
            if (data.needs_lead_info && !this.isLeadFormVisible) {
                this.showLeadForm();
            }
            
            // Update userName if available
            if (data.user_name && !this.userName) {
                this.userName = data.user_name;
            }
            
        } catch (error) {
            console.error('Error sending message:', error);
            this.hideTypingIndicator();
            this.addMessage("Sorry, I'm having trouble connecting. Please try again in a moment.", 'bot');
        }
    }

    addMessage(text, role) {
        const messagesContainer = document.getElementById('chatbotMessages');
        const messageDiv = document.createElement('div');
        messageDiv.className = `message ${role}`;
        
        if (role === 'bot') {
            messageDiv.innerHTML = `
                <div class="message-content">
                    <div class="avatar bot-avatar">WB</div>
                    <div class="message-bubble">${this.escapeHtml(text)}</div>
                </div>
            `;
        } else {
            messageDiv.innerHTML = `
                <div class="message-content">
                    <div class="message-bubble">${this.escapeHtml(text)}</div>
                    <div class="avatar user-avatar">You</div>
                </div>
            `;
        }
        
        messagesContainer.appendChild(messageDiv);
        this.scrollToBottom();
        
        // Save to conversation
        this.conversation.push({ role, text });
        this.saveConversation();
    }

    showTypingIndicator() {
        const messagesContainer = document.getElementById('chatbotMessages');
        const indicator = document.createElement('div');
        indicator.className = 'message bot typing-indicator';
        indicator.id = 'typingIndicator';
        indicator.innerHTML = `
            <div class="message-content">
                <div class="avatar bot-avatar">WB</div>
                <div class="message-bubble">
                    <div class="typing-dots">
                        <span></span><span></span><span></span>
                    </div>
                </div>
            </div>
        `;
        messagesContainer.appendChild(indicator);
        this.scrollToBottom();
    }

    hideTypingIndicator() {
        const indicator = document.getElementById('typingIndicator');
        if (indicator) {
            indicator.remove();
        }
    }

    showLeadForm() {
        this.isLeadFormVisible = true;
        document.getElementById('leadForm').style.display = 'block';
    }

    hideLeadForm() {
        this.isLeadFormVisible = false;
        document.getElementById('leadForm').style.display = 'none';
    }

    async submitLead() {
        const name = document.getElementById('leadName').value.trim();
        const email = document.getElementById('leadEmail').value.trim();
        const phone = document.getElementById('leadPhone').value.trim();
        const message = document.getElementById('leadMessage').value.trim();
        
        if (!name || !email) {
            alert('Please fill in at least name and email');
            return;
        }
        
        try {
            const response = await fetch(`${this.apiUrl}/lead`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    user_id: this.userId,
                    name: name,
                    email: email,
                    phone: phone,
                    message: message,
                    project_type: message || 'Website Project'
                })
            });
            
            const data = await response.json();
            
            // Hide lead form
            this.hideLeadForm();
            
            // Add confirmation message
            this.addMessage(`Thank you ${name}! We'll contact you soon at ${email}. 🎉`, 'bot');
            
            // Clear form
            document.getElementById('leadName').value = '';
            document.getElementById('leadEmail').value = '';
            document.getElementById('leadPhone').value = '';
            document.getElementById('leadMessage').value = '';
            
        } catch (error) {
            console.error('Error submitting lead:', error);
            alert('There was an error. Please try again.');
        }
    }

    scrollToBottom() {
        const messagesContainer = document.getElementById('chatbotMessages');
        messagesContainer.scrollTop = messagesContainer.scrollHeight;
    }

    saveConversation() {
        // Save last 20 messages to localStorage
        const recentMessages = this.conversation.slice(-20);
        localStorage.setItem('webbaba_chatbot_conversation', JSON.stringify(recentMessages));
    }

    loadConversation() {
        const saved = localStorage.getItem('webbaba_chatbot_conversation');
        if (saved) {
            try {
                this.conversation = JSON.parse(saved);
            } catch (e) {
                this.conversation = [];
            }
        }
    }

    escapeHtml(text) {
        const div = document.createElement('div');
        div.textContent = text;
        return div.innerHTML;
    }
}

// Initialize chatbot when DOM is ready
if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', () => {
        new WebBabaChatbot();
    });
} else {
    new WebBabaChatbot();
}

