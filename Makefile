CXX = g++
MAKE = make
SRC = ./src#CLI, Main hardware cntrol software
APP = ./app#Android control app
BIN = ./bin

clean:
	$(MAKE) -C $(APP)/ clean 
	rm $(BIN)/*

$(BIN)/hdwrctl:
	$(CXX) $(SRC)/hdwrctl.cpp -o $(BIN)/hdwrctl

$(BIN)/home_brain.apk:
	$(MAKE) -C $(APP)/ app

all: $(BIN)/hdwrctl $(BIN)/home_brain.apk
 
