/* Você tem 5 jogadores. Para cada jogador, leia 3 notas de avaliação (float).
Calcule a média de cada jogador. Use if/else para classificar:
Excelente: média >= 9, Bom: entre 7 e 9, Regular: entre 5 e 7, Ruim: abaixo de 5*/

#include <stdio.h>

float calcularMedia(float nl, float n2, float n3) {
	return (nl + n2 + n3) / 3;
}

void classificar(float media) {
	if (media >= 9)
		printf("Excelente\n");
	else if (media < 9 && media > 7)
		printf("Bom\n");
	else if (media < 7 && media > 5)
		printf("Regular\n");
	else
		printf("Ruim\n");
}

int main () {
	float n1, n2, n3, media;
	
	for (int i = 1; i <= 5; i++) {
		printf("Jogador %d\n", i);
		
		printf("Digite as 3 notas: \n");
		scanf("%f %f %f", &n1, &n2, &n3);
		
		media = calcularMedia(n1, n2, n3);
		
		printf("Media = %.2f - ", media);
		
		classificar(media);
		
		printf("\n=========== \n \n");
	}
	
	return 0;
}

