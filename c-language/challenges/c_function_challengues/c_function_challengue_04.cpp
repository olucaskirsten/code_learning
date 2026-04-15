// Crie um programa que leia os FPS (frames por segundo) de um jogo em 6 momentos
// e calcule a média. Digite os FPS registrados em 6 momentos:
// Momento 1: 24, Momento 2: 23, Momento 3: 20, Momento 4: 34, Momento 5: 55
// Momento 6: 48, Media de FPS: 34.00

#include <stdio.h>

int main () {
	float fps[6], soma = 0, media;
	
	printf("Digite os FPS registrados em 6 momentos: \n");
	
	for (int i = 0; i < 6; i++) {
		printf("momento %d: ", i + 1);
		scanf("%f", &fps[i]);
		
		soma += fps[i];
	}
		media = soma / 6;
		printf("\nMedia de FPS: %f", media);
			
	return 0;
}
