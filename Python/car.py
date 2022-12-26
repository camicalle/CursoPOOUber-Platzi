from account import Account

class Car :
    id = int
    license = str
    driver = Account("", "")
    passenger = int
    
    def __init__(self, license, driver):
        self.license = license
        self.driver = driver
        self.__passenger = None
        
    @property
    def passenger(self):
        return self.__passenger
    
    @passenger.setter
    def passenger(self, passenger):
        if passenger == 4:
            self.__passenger = passenger
        else :
            print("Necesitas asignar 4 pasajeros")