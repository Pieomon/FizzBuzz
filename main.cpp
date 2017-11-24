/******************************************************************************

                              Online C++ Compiler.
               Code, Compile, Run and Debug C++ program online.
Write your code in this editor and press "Run" button to compile and execute it.

*******************************************************************************/

#include <iostream>
#include <string>
#include <stdio.h>
#include <stdlib.h>

using namespace std;

int main()
{
    for( int i = 1; i <= 100; i++)
    {
        //Print Fizz for multiples of 3  
        //Print Buzz for multiples of 5
        //Print FizzBuzz for both
        string input = "";
        int found = 0;
        if( i % 3 == 0 )
        {
            input =+ "Fizz";
            found = 1;
        }
        if( i % 5 == 0 )
        {
            input = input + "Buzz";
            found = 1;
        }
        if(!found)
        {
            cout << i << endl;
        }
        else
        {
            cout << input << endl;
        }
    }
}



