// #include <stdio.h>
#include <iostream>

int main() {
  int x = 0;
  int &a = x;
  a = 1;
  std::cout << "This is x:" << x;
  return 0;
}