#include <stdio.h>

int main() {
    int totalProdutos;

    printf("Digite a quantidade de produtos a serem cadastrados: ");
    scanf("%d", &totalProdutos);

    for (int i = 1; i <= totalProdutos; i++) {
    	char nome[50];
    	int estoque, minimo;
    	
    	printf("\nProduto %d: \n", i);
    	printf("Nome do Produto: \n");
    	scanf("%s", &nome);
    	printf("Quantidade em estoque: \n");
    	scanf("%d", &estoque);
    	printf("Estoque Minimo Recomendado: \n");
    	scanf("%d", &minimo);
    	
    	if(estoque < minimo) {
    		printf("-> O produto %s precisa ser reposto! (Estoque: %d, Mínimo: %d)", nome, estoque, minimo);
    	 	} else {
    	 	printf("-> O produto %s tem estoque suficiente. (Estoque: %d, Mínimo: %d)", nome, estoque, minimo);
			 }
    	

    }

    return 0;
}

