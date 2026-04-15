#include <stdio.h>

int main(){
	int idade;
	
	printf("Digite a idade do jogador: ");
	scanf("%d", &idade);
	
	if(idade <= 20){
		printf("Jogador pode jogar no sub20");
	} else {
	printf("Jogador deve migrar para categoria profissional");
	
	}
	
	return 0;
}
