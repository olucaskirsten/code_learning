// 5 - Comparando Score com Recorde
// Crie um programa que compare 5 scores com o recorde mundial
// e informe se o jogador bateu o recorde. Assuma que o recorde
// atual é igual a 5000. Caso o recorde seja quebrado, o recorde deverá ser atualizado.
/* Digite os 5 scores do jogador:
Score 1: 1000 - Score 2: 5001 - Parabens! Score 5001 superou o recorde!
Score 3: 5001 - Score 4: 7000 - Parabens! Score 7000 superou o recorde!
Score 5: 5099*/

#include <stdio.h>

int main () {
	int scores[5], recorde = 5000;
	
	printf("digite os 5 scores do jogador: \n");
	for (int i = 0; i < 5; i++) {
		printf("Score %d: ", i + 1);
		scanf("%d", &scores[i]);
		
		if (scores[i] > recorde) {
			recorde = scores[i];
			printf("Parabens! Score %d superou o recorde!\n", scores[i]);			
		}
	}
	
	return 0;
}
