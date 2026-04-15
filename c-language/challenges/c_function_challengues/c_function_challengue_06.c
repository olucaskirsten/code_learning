// 2 - Encontrando o Maior Dano Causado
// Crie um programa que leia o dano causado em 4 ataques e exiba qual
// foi o ataque mais forte.
// Digite o dano de 4 ataques: Ataque 1: 10, Ataque 2: 33, Ataque 3: 99,
// Ataque 4: 78 - Maior dano causado: 99

#include <stdio.h>

int main () {
	int dano[4], maior;
	
	printf("Digite o dano de 4 ataques:\n");
	
	for (int i = 0; i < 4; i++) {
		printf("ataque %d: ", i + 1);
		scanf("%d", &dano[i]);
		
		if (dano[i] > maior) {
			maior = dano[i];
		}
	}
		printf("\n maior dano causado: %d", maior);
	
	return 0;
}
