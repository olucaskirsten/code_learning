#include <stdio.h>

int main(){
	int opcao;
	
	printf("conheca o nosso menu:\n 1. Hamburguer\n 2.Cachorro-quente\n 3.Pizza\n 4.Sair\n");
	
	printf("=========================================\n");
	
	printf("Digite o numero do item: ");
	scanf("%d", &opcao);
	
	switch (opcao){
		case 1:
            printf("Item #1: Hamburguer esta em producao!");
            break;
        case 2:
            printf("Item #2: Cachorro-quente esta em producao!");
            break;
        case 3:
            printf("Item #3: Pizza esta em producao!");
            break;
        case 4:
            printf("Encerrando pedido...");
            break;
        default:
        	printf("Opcao invalida!");
	}
	
	return 0;
}
