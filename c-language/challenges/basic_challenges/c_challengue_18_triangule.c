#include <stdio.h>

int main() {
	int n;
	
	printf("Digite um numero para base do triangulo: ");
	scanf("%d", &n);
	
	for(int i = 1; i <= n; i++) {
		for(int j = 1; j <= i; j++) {
			printf("%d ", j);
	}
	printf("\n");
    }
    
    
	return 0;
}
