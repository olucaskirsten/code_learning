//VERIFICAR SE UM NÚMERO É PAR OU IMPAR

#include <stdio.h>

int parImpar (int numero) {
	if (numero % 2 == 0) {
		return 1; //1=PAR	
	} else {
		return 0; //0=IMPAR
	}
}

int main() {
	int num;
	
	printf("Digite um numero: ");
	scanf("%d", &num);
	
	if (parImpar(num) == 1){
		printf("PAR");
	} else {
		printf("IMPAR");
	}
	
	return 0;
}
