// Trabalhando com strings
// Crie um programa que recebe 5 nomes e imprime apenas os nomes
// que contêm um determinado caracter definido pelo usuário. Exemplo: letra 'a'.

#include <stdio.h>

int main() {
	char nomes [5][50];
	char letra;
	int j, encontrou;
	
	//entrada da letra a ser buscada
	printf("digite a letra que quer buscar: ");
	scanf(" %c", &letra);
	
	//entrada dos 5 nomes
	for (int i = 0; i < 5; i++) {
		printf("digite o nome: ");
		scanf("%s", &nomes[i]);
	}
	
	// verifica e imprime nomes com a letra
	printf("\n Nomes que contem a letra '%c': \n", letra);
	
	for (int i = 0; i < 5; i++) {
		encontrou = 0;
		
		for (j = 0; nomes[i][j] != '\0'; j++) {
			if (nomes[i][j] == letra) {
				encontrou = 1;
				break;
			}
		}
		
		if (encontrou) {
			printf("%s\n", nomes[i]);
		}
	}
	
	return 0;
}
