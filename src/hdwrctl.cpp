#include <iostream>
#include <stdlib.h>
#include <sys/io.h>

#define pp_port (0x378) 
const short unsigned int  pins = 8; //Hardware digital pins available


using namespace std;




int main(int argc, char **argv)
{

	//Check parameters: recive an (0 to pins)  int number , to describe wich digital hardware pin need to put up
	if( (argc!=2) || ( atoi(argv[1])<0 || atoi(argv[1])>pins ) ){ cout << "Usage: " << argv[0] << " [number] " << endl << "[number] is a (0 - " << pins << ") that describes hardware pin to put up" << endl; }

	//Configure port permissions
	if(ioperm(pp_port,1,1))
	{ 
		cout << "Fatal Error:  Can't use pp_port, not enough permissions." << endl << flush;
		return -1;
	}

	

	return 0;
}
