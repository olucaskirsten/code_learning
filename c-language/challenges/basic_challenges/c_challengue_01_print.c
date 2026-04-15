// Exercicio 1

#include <stdio.h>

int main() {
	char nomeJogador[6];
	int idade;
	int numGols;
	
	printf("Digite o nome do jogador:");
	scanf("%s", &nomeJogador);
	printf("Digite a idade dele:");
	scanf("%d", &idade);
	printf("Digite a quantidade de gols que ele teve na carreira:");
	scanf("%d", &numGols);
	
	printf("Nome do jogador: %s \n", nomeJogador);
	printf("Idade do jogador: %d \n", idade);
	printf("Numero de Gols feitos: %d \n", numGols);
	
	return 0;
	}
