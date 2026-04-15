// exercicio 3

#include <stdio.h>

int main (){
	int minutos, horas, resto;
	
	printf("Digite o tempo em minutos: ");
	scanf("%d", &minutos);
	
	horas = minutos / 60;
	resto = minutos % 60; 
	
	printf("%d minutos em horas: %.d horas e %d minutos", minutos, horas, resto);
	
	return 0;
}
