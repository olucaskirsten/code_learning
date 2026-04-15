#include <stdio.h>

int main() {
	int n;
	
	printf("digite um número para o tamanho do quadrado: ");
	scanf("%d", &n);
	printf("\n");
	
	for(int i = 0; i < n; i++) {
	    for(int j = 0; j < n; j++){
	    	printf("* ");
		}
		printf("\n");	
	}
	
	
	return 0;
}
