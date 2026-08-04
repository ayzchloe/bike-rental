class PricePredictionEngine:

    def predict(self, bike):

        score = 0
        reasons = []

        # Engine CC
        cc = bike.engine_cc

        if cc >= 150:
            score += 150
            reasons.append("High engine capacity")
        elif cc >= 100:
            score += 100
            reasons.append("Medium engine capacity")
        else:
            score += 60
            reasons.append("Economy bike")

        # Brand
        if bike.brand.lower() in ["honda", "yamaha"]:
            score += 80
            reasons.append("Premium brand")
        elif bike.brand.lower() == "suzuki":
            score += 60
            reasons.append("Popular brand")
        else:
            score += 40
            reasons.append("Standard brand")

        # Bike Type
        if bike.bike_type.lower() == "sports":
            score += 120
            reasons.append("Sports bike")
        elif bike.bike_type.lower() == "cruiser":
            score += 100
            reasons.append("Cruiser bike")
        else:
            score += 70
            reasons.append("Standard bike")

        # GPS
        if bike.gps.lower() == "yes":
            score += 20
            reasons.append("GPS installed")

        # Helmet
        if bike.helmet.lower() == "yes":
            score += 10
            reasons.append("Helmet included")

        # City
        if bike.city.lower() == "karachi":
            score += 120
            reasons.append("High demand city")
        elif bike.city.lower() == "lahore":
            score += 100
            reasons.append("Busy market")
        else:
            score += 70
            reasons.append("Normal demand")

        return {
            "predicted_price_per_hour": score,
            "predicted_price_per_day": score * 8,
            "confidence": 95,
            "reasons": reasons
        }

engine = PricePredictionEngine()