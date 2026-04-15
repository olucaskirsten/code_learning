#include <stdio.h>

int main() {
    int opcao;
    
    printf("Digite o numero da opcao: ");
    scanf("%d", &opcao);

    switch (opcao) {
        case 1:
            printf("Fase numero 1");
            break;
        case 2:
            printf("Fase numero 2");
            break;
        case 3:
            printf("Fase numero 3");
            break;
        case 4:
            printf("Fase numero 4");
            break;
        default:
        	printf("invalido!");
    }

    return 0;
}

