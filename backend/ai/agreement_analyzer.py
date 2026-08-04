import os
import json
from dotenv import load_dotenv
import google.generativeai as genai

load_dotenv()

API_KEY = os.getenv("GEMINI_API_KEY")

if API_KEY:
    genai.configure(api_key=API_KEY)

model = genai.GenerativeModel("gemini-2.5-flash")


def analyze_agreement(agreement_text):

    if not API_KEY:
        return {
            "risk_score": 0,
            "risk_level": "Unknown",
            "summary": "Gemini API Key not configured."
        }

    prompt = f"""
You are a Legal AI Expert.

Analyze this Bike Rental Agreement.

Return ONLY JSON.

Format:

{{
"risk_score":85,
"risk_level":"Medium",
"summary":"Summary here",
"important_points":[
"point1",
"point2",
"point3"
],
"warnings":[
"warning1",
"warning2"
],
"recommendations":[
"recommendation1",
"recommendation2"
]
}}

Agreement:

{agreement_text}
"""

    try:

        response = model.generate_content(prompt)

        text = response.text.strip()

        text = text.replace("```json", "")
        text = text.replace("```", "")

        return json.loads(text)

    except Exception as e:

        return {
            "risk_score":0,
            "risk_level":"Unknown",
            "summary":str(e)
        }