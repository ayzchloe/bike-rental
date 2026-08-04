from pydantic import BaseModel


class UserCreate(BaseModel):
    full_name: str
    email: str
    phone: str
    cnic: str
    password: str
    role: str

    provider_type: str = "Individual"

    company_name: str | None = None

    company_address: str | None = None

    company_logo: str | None = None


class BikeCreate(BaseModel):
    owner_id: int

    bike_name: str
    brand: str
    model: str
    bike_type: str
    registration_number: str
    color: str
    city: str

    price_per_hour: float
    price_per_day: float

    engine_cc: str
    fuel_type: str
    transmission: str

    description: str

    gps: str
    helmet: str

    image: str
    documents: str


class BookingCreate(BaseModel):

    customer_id: int

    bike_id: int

    booking_type: str

    start_date: str

    end_date: str

    start_time: str

    end_time: str

    total_amount: float   


class WithdrawCreate(BaseModel):

    owner_id: int

    amount: float


class ReviewCreate(BaseModel):

    booking_id: int

    bike_id: int

    customer_id: int

    rating: int

    review: str


class AgreementCreate(BaseModel):

    booking_id: int

    customer_id: int

    owner_id: int

    agreement_file: str

    accepted: str = "Pending"    


from pydantic import BaseModel


class ReviewRequest(BaseModel):
    review: str



class FraudRequest(BaseModel):

    customer_id: int
    bike_id: int
    booking_amount: float   




class MaintenanceRequest(BaseModel):

    bike_id: int



class PricePredictionRequest(BaseModel):
    brand: str
    engine_cc: int
    bike_type: str
    gps: str
    helmet: str
    city: str


from pydantic import BaseModel


class DemandForecastRequest(BaseModel):

    city: str

    weather: str

    day: str

    month: str    


class ChatRequest(BaseModel):

    message: str    