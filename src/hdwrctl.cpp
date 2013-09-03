/*
 This file is part of home_brain.

 home_brain is free software: you can redistribute it and/or modify
 it under the terms of the GNU General Public License as published by
 the Free Software Foundation, either version 3 of the License, or
 (at your option) any later version.

 home_brain is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU General Public License for more details.

 You should have received a copy of the GNU General Public License
 along with Foobar.  If not, see <http://www.gnu.org/licenses/>.

*/


#include <iostream>
#include <stdlib.h>
#include <sys/io.h>

#define pp_port (0x378) 
const short unsigned int  pins = 8; //Hardware number of digital pins available


using namespace std;




int main(int argc, char **argv)
{


	/*TODO
	 * Improve this fucking ugly "Usage" message
	*/

	//Check parameters: recive an (0 to pins)  int number , to describe wich digital hardware pin need to put up
	if ( (argc!=3) || ( atoi(argv[1])<0 || atoi(argv[1])>pins ) || ( argv[2]!="0" || argv[2]!="1" ) )
								{ cout << "Usage: " << argv[0] << " [number] " << "<0,1> " << endl 
									<< "[number] is a (0 - " << pins 
									<< ") that describes hardware pin to put up" << endl;
       									<< "<0,1> describes pin off or on state respectivly"<<endl;
								}

	//Configure port permissions
	if (ioperm(pp_port,1,1))
	{ 
		cout << "Fatal Error:  Can't use pp_port, not enough permissions." << endl << flush;
		return -1;
	}

	

	return 0;
}
