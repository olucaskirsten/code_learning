#include <stdio.h>

int main () {
	int numero = 10;
	float decimal = 10.10;
	char letra = 'A';
	char nome[6] = "Lucas"; 
	
	printf("Numero: %d \n", numero);
	printf("Numero Quebrado: %.2f \n", decimal);
	printf("Letra: %c \n", letra);
	printf("Nome: %s", nome);
	
	return 0;
}
