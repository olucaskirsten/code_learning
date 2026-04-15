#include <stdio.h>

int main() {
	char operador; 
	float a, b;

    printf("Digite a operacao (+, -, *, /): ");
    scanf("%c", &operador);

    printf("Digite os dois valores: \n");
    scanf("%f %f", &a, &b);

    switch (operador) {
	    case '+':
		  printf("%.2f %c %.2f = %.2f", a, operador, b, (a + b));
          break;
}


	return 0;
}
