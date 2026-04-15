#include <stdio.h>

int main() {
	int num1 = 10, num2 = 2;
	
	int soma = num1 + num2;
	int subtracao = num1 - num2;
	int mult = num1 * num2;
	int div = num1 / num2;
	int modulo = num1 % num2;
	int teste = num1 % num2;
	
	printf("Soma: %d + %d = %d \n", num1, num2, soma);
	printf("Subtracao: %d - %d = %d \n", num1, num2, subtracao);
	printf("Multiplicacao: %d * %d = %d \n", num1, num2, mult);
	printf("Divisao: %d / %d = %d \n", num1, num2, div);
	printf("Modulo: %d %% %d = %d \n", num1, num2, modulo);
	printf("teste: %d \n", teste);

	
	return 0;
}
