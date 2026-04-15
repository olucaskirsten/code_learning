#include <stdio.h>

int main(){
	int amarelo;
	int vermelho;
	
	printf("Digite o numero de cartoes amarelos: ");
	scanf("%d", &amarelo);
	
	if(amarelo >= 2){
		printf("JOGADOR EXPULSO!");
	} else {
	printf("JOGADOR NaO SERa EXPULSO!");
	
	}
	
	return 0;
}
