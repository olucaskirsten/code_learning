//Crie uma função que receba três inteiros e retorne o maior deles.

#include <stdio.h>

int maior(int a, int b, int c) {
	if (a >= b && a >= c)
	   return a;
	else if (b >= a && b >= c)
	   return b;
	else
	   return c;
}

int main() {
	int x, y, z;
	printf("Digite tres numeros: \n");
	scanf("%d %d %d", &x, &y, &z);
	
	printf("Maior numero: %d\n", maior(x, y, z));
	return 0;

}
