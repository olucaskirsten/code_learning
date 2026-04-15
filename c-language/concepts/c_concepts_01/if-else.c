#include <stdio.h>

int main() {
	int idade;
	
	printf("Digite a sua idade:");
	scanf("%d", &idade);
	
	if (idade >= 18) {
		printf("Ele = MAIOR!");
	} else {
		printf("Ele = MENOR.");
	}
	
	
	
	return 0;
}

