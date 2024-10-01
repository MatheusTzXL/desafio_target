import java.util.Scanner;

public class inverter {

    public static String inverterString(String str) {
        String invertida = ""; 
        int comprimento = str.length(); 

        for (int i = comprimento - 1; i >= 0; i--) {
            invertida += str.charAt(i);
        }

        return invertida; 
    }

    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);

        System.out.print("Digite uma string para inverter: ");
        String stringOriginal = sc.nextLine(); 

        String stringInvertida = inverterString(stringOriginal);

        System.out.println("Palavra invertida: " + stringInvertida);

        sc.close(); 
    }
}
