#include <stdio.h>

int main() {
	int gols;
	
	printf("quantos gols ele fez na temporada:");
	scanf("%d", &gols);
	
	if (gols > 10){
		printf("Excelente temporada!"); 	
		} else if (gols >= 5){
		printf("Boa temporada!");
		} else {
			printf("Temporada abaixo do esperado.");
		}

	
	return 0;
}
