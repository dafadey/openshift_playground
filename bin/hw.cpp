#include <iostream>

int main(int argc, char* argv[])
{
	if(argc > 1)
		std::cout << "Hi " << argv[1] << std::endl;
	else
		std::cout << "Hi somebody" << std::endl;
}
