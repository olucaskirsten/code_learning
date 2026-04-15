// Selecionando números pares
// Crie um programa que recebe 10 números inteiros do usuário e
// retorna um array com apenas os números pares.

#include <stdio.h>

int main () {
	int numeros[10];
	int pares[10];
	int j = 0;
	
	for (int i = 0; i < 10; i++) {
		printf("digite o numero %d: ", i + 1);
		scanf("%d", &numeros[i]);
		
		if (numeros[i] % 2 == 0) {
			pares[j] = numeros[i];
			j++;
		}
	}
	printf("\n===numeros pares===\n");
	
	for (int i = 0; i < j; i++) {
		printf("numero par %d: %d\n", i + 1, pares[i]);
		
	}
	
	return 0;
}
