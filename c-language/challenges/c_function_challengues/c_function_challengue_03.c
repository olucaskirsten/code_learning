// Crie uma função que recebe uma string (char[ ]) e retorna a quantidade de vogais.

#include <stdio.h>

int contarVogais (char palavra[]) {
	int contador = 0;
	
	for (int i = 0; palavra[i] != '\0'; i++) {
		if (palavra[i] == 'a' || palavra[i] == 'e' || palavra[i] == 'i' || palavra[i] == 'o' || palavra[i] == 'u') {
			contador++;
		}
	}
	
	return contador;
}

int main () {
	char texto [100];
	
	printf("Digite uma palavra: ");
	scanf("%s", &texto);
	
	printf("quantidade de vogais: %d", contarVogais(texto));
	
	return 0;
}
