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
 along with Home_brain.  If not, see <http://www.gnu.org/licenses/>.

*/


#include <iostream>
#include <stdlib.h>
#include <sys/io.h>

#define PP_PORT (0x378) 
const short unsigned int  pins = 8; //Hardware number of digital pins available


/* PP pins bytes */
#define PIN1 0x01
#define PIN2 0x02
#define PIN3 0x04
#define PIN4 0x08
#define PIN5 0x10
#define PIN6 0x20
#define PIN7 0x40
#define PIN8 0x80



using namespace std;


/* Put on STATE state the PIN paralel port pin, returns out state byte before success*/
unsigned char pp_modify(unsigned short int pin, unsigned short int state);


int main(int argc, char **argv)
{



	/* Configure port permissions */
	if (ioperm(PP_PORT,1,1))
	{ 
		cout << "Fatal Error:  Can't use pp_port, not enough permissions." << endl << flush;
		return -1;
	}




	/* Set PP_PORT data byte to standar init value (usully zero) */
	//hardware specyfic requierements needs data byte set to 1 
	if (atoi(argv[1]) == 0)
	{
		outb(1,PP_PORT);
		return 0;

	}




	/*TODO
	 * Improve this fucking ugly "Usage" message
	*/

	//Check parameters: recive an (0 to pins)  int number , to describe wich digital hardware pin need to put up
	//and <0 , 1 > to describe off and on states for that pin.
	

	if ( (argc!=3) || ( atoi(argv[1])<1 || atoi(argv[1])>pins ) || ( atoi(argv[2])!=0 && atoi(argv[2])!=1 )  )
								{ cout << "Usage: " << argv[0] << " [number] " << "<0,1> " << endl 
									<< "[number] is a (0 - " << pins 
									<< ") that describes hardware pin to put up" << endl
       								<< "<0,1> describes pin off or on state respectivly"<<endl;
									return -1;
								}

	


	/* Get PIN to put up */


	unsigned short int PIN;
	unsigned char actual_state;
	cout << "state:  " << actual_state << endl;


	switch (atoi(argv[1])) 
	{
		case 1: PIN=PIN1;break;
		case 2: PIN=PIN2;break;
		case 3: PIN=PIN3;break;
		case 4: PIN=PIN4;break;
		case 5: PIN=PIN5;break;
		case 6: PIN=PIN6;break;
		case 7: PIN=PIN7;break;
		case 8: PIN=PIN8;break;
	}


	cout << "PIN:  " << PIN << endl;

	/* Achive PP STATE on PIN with last argument boolean value, and get new pp state as ACTUAL_STATE */
	actual_state = pp_modify(PIN, atoi(argv[2]));


	
	return actual_state; //return PP STATE before achiving user requierements +/
}




unsigned char pp_modify(unsigned short int pin, unsigned short int state)
{

	/* get actual PP STATE to aply changes */
	unsigned char actual_state = inb(PP_PORT);



	/*
	 * To turn PIN to ON state, aply binary operation:  ACTUAL_STATE or GOING_STATE
	 * To turn PIN to OFF state, aply binary operation: ACTUAL_STATE and ~GOING_STATE
	*/

	if (state==1)
	{

		outb((actual_state | pin),PP_PORT);
	}


	if (state==0)
	{
		outb((actual_state & ~pin),PP_PORT);
	
	}

	return inb(PP_PORT);


}
