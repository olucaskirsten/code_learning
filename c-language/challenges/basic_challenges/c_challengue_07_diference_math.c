//exercicio 5

#include <stdio.h>
#include <math.h>

int main(){
	
	float salario1, salario2, diferenca;
	
	printf("Digite o salario do primeiro jogador: ");
	scanf("%f", &salario1);
	
	printf("\nDigite o salario do segundo jogador: ");
	scanf("%f", &salario2);
	
	diferenca = fabs(salario1 - salario2);
	
	printf("diferenca: %.2f", diferenca);
	
	
	return 0;
}
