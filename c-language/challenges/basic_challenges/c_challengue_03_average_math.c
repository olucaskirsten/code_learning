// exercicio 2

#include <stdio.h>

int main(){
	int gols, partidas;
	float media;
	
	
	printf("Digite o numero total de gols: ");
	scanf("%d", &gols);
	printf("\nDigite o numero total de partidas: ");
	scanf("%d", &partidas);
	
	media = (float)gols / partidas;
	
	printf("\nMedia de gols: %.2f", media);
	
	return 0;
}
