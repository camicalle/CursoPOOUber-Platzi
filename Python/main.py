from car import Car
from account import Account
from uberX import UberX
from user import User

if __name__ == "__main__":
    print("Hello World")
    
    car = Car("ASD123", Account("Andrés Herrera", "12345"))
    car.passenger = 4
    if car.passenger is not None :
        print(vars(car))   
        print(vars(car.driver))  
        
    
    uberX = UberX("QWE452", Account("Andrea Montes", "67890"), "Chevrolet", "Spark")
    uberX.passenger = 2
    if uberX.passenger is not None :
        print(vars(uberX))
        print(vars(uberX.driver))
    
    user = User("Carlos", "123123")
    print(vars(user))