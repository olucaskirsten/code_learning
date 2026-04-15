// GRAVAR DADOS PARA VETOR STRING

#include <stdio.h>

int main () {
	char nome[3][20];
	
	for (int i = 0; i < 3; i++) {
		printf("digite um nome %d: ", i + 1);
		scanf("%s", nome[i]);
	}
	
	for (int i = 0; i < 3; i++) {
		printf("Nome %d: %s\n", i + 1, nome[i]);
	}
	
	return 0;
}
