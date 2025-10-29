"""
Configuration file for Web Baba AI Chatbot
Update these values with your API keys
"""

import os

# OpenAI API Key - Get from https://platform.openai.com/api-keys
# Set this as environment variable OPENAI_API_KEY
OPENAI_API_KEY = os.environ.get('OPENAI_API_KEY', 'your-openai-api-key-here')

# Google Sheets Configuration
# 1. Create a Google Sheet for storing leads
# 2. Get the Sheet ID from the URL: https://docs.google.com/spreadsheets/d/YOUR_SHEET_ID/edit
# 3. Create a service account and download credentials JSON
# 4. Put the JSON content here as a string (or use file path)

# Google Sheets ID - Set as environment variable GOOGLE_SHEET_ID
GOOGLE_SHEET_ID = os.environ.get('GOOGLE_SHEET_ID', '')

# Google Sheets credentials - Set as environment variable GOOGLE_SHEET_CREDS
# This should be the JSON string of your service account credentials
GOOGLE_SHEET_CREDS = os.environ.get('GOOGLE_SHEET_CREDS', '{}')

# Option 2: Use a file path instead
# GOOGLE_SHEET_CREDS = "path/to/credentials.json"

# Chatbot Settings
CHATBOT_NAME = "Web Baba Assistant"
COMPANY_NAME = "Web Baba"
COMPANY_EMAIL = "info@web-baba.com"
COMPANY_PHONE = "+91 63668 91448"

# Branding Colors
COLOR_PRIMARY = "#111"      # Dark
COLOR_ACCENT = "#E91E63"    # Pink
COLOR_TEXT = "#fff"         # White

