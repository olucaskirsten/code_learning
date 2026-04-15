#include <stdio.h>

int main() {
    int dias;
    int i;
  
    printf("Digite quantos dias de treinamento: ");
    scanf("%d", &dias);
    
    for (i = 0; i < dias; i++) {
        printf("Dia %d ta pago!\n", i + 1);
    }

    return 0;
}

