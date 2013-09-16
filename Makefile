CXX = g++
SRC = ./src#CLI, Main hardware cntrol software
APP = ./app#Android control app
BIN = ./bin

all: hdwrctl app

clean:
	rm $(BIN)/*

hdwrctl:
	$(CXX) $(SRC)/hdwrctl.cpp -o $(BIN)/hdwrctl

app:
	$(MAKE) -C $(APP)/

