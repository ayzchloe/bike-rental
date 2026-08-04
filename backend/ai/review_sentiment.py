import os
import json
from dotenv import load_dotenv
import google.generativeai as genai

load_dotenv()

genai.configure(api_key=os.getenv("GEMINI_API_KEY"))

model = genai.GenerativeModel("gemini-2.5-flash")


def analyze_review(review):

    prompt=f"""
You are an AI Review Analyzer.

Analyze this bike rental review.

Return ONLY JSON.

{{
"sentiment":"Positive",
"rating":5,
"confidence":98,
"summary":"One line summary.",
"keywords":[
"Comfortable",
"Fast",
"Clean"
]
}}

Review:

{review}
"""

    response=model.generate_content(prompt)

    text=response.text.replace("```json","").replace("```","")

    return json.loads(text)