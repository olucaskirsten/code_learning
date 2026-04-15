#include <stdio.h>

int main(){
	int capacidade, torcedores;
	float ocupacao;
	
	printf("Digite a capacidade maxima de torcedores no estadio:");
	scanf("%d", &capacidade);
	printf("Digite o numero de torcedores presentes no estadio:");
	scanf("%d", &torcedores);
	
	ocupacao = (float)torcedores / capacidade * 100;

    printf("\n=== RESULTADO ===\n");

    printf("Lotação: %.2f%% \n", ocupacao);

    if (ocupacao > 90) {
    printf("Lotado!\n");
    } else if (ocupacao >= 70) {
    printf("Otima presença de publico!\n");
    } else if (ocupacao >= 50) {
    printf("Publico razoavel.\n");
    } else {
    printf("Morumbis.\n");
    }

return 0;

	
	
	
	return 0;
}
