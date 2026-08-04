from .llm_chat import ask_llm
from .db_chat import get_available_bikes


def chat(message, db):

    bikes = get_available_bikes(db)

    bike_info = ""

    if bikes:

        bike_info = "Available Bikes:\n"

        for b in bikes:

            bike_info += f"""
Bike Name: {b['name']}
Brand: {b['brand']}
City: {b['city']}
Type: {b['type']}
Price/Hour: {b['hour']}
Price/Day: {b['day']}
Engine: {b['cc']}cc

"""

    prompt = f"""
You are Bike Sharing AI Assistant.

These bikes are currently available.

{bike_info}

Answer the user's question using ONLY these bikes whenever the user asks about bikes.

User:

{message}
"""

    reply = ask_llm(prompt)

    return {

        "reply": reply

    }