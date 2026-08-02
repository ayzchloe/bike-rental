from fastapi import FastAPI

app = FastAPI()

@app.get("/")
def home():
    return {"message": "GET Working"}

@app.post("/signup")
def signup():
    return {"message": "POST Working"}