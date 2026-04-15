package exercicio3;

public class ContaBancaria {
    String titular;
    double saldo = 0;
 
    public ContaBancaria(String titular, double saldo) {
        this.titular = titular;
        this.saldo = saldo;
    }

    public String getTitular() {
        return titular;
    }

    public double getSaldo() {
        return saldo;
    }

    public void setSaldo(double saldo) {
        this.saldo = saldo;
    }

    public void exibirInfo(){
        System.out.println("Titular: " + this.titular);
        System.out.println("Saldo: " + this.saldo);
        System.out.println();
    }
    
    public void setDepositar(double valor){
        this.saldo += valor;
    }
    
    public void setSacar(double valor){
        if(valor > this.saldo){
            System.out.println("Nao e possivel realizar o saque!");
        }
        else{
            this.saldo -= valor;
        }
    }
}
