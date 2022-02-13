import java.util.Scanner;

public class Main
{
	public static void main(String[] args)
	{
		Scanner input = new Scanner(System.in);

		System.out.println("Masukkan banyaknya tim yang akan di input:");
		int n = 0;
		try{
			n = Integer.parseInt(input.nextLine());
		}catch(Exception e){
			System.out.println(e.getMessage());
		}

		soccerTeam[] teamList = new soccerTeam[n];

		String name = new String();
		String nation = new String();
		int year_founded = 0;
		int m = 0, i = 0;
		for(i = 0; i < n; i++)
		{
			System.out.println("masukkan nama tim " + (i+1) + ":");
			try{
				name = input.nextLine();
			}catch(Exception e){
				System.out.println(e.getMessage());
			}
			
			System.out.println("masukkan negara asal tim " + (i+1) + ":");
			try{
				nation = input.nextLine();
			}catch(Exception e){
				System.out.println(e.getMessage());
			}

			System.out.println("masukkan tahun berdiri tim " + (i+1) + ":");
			try{
				year_founded = Integer.parseInt(input.nextLine());
			}catch(Exception e){
				System.out.println(e.getMessage());
			}

			System.out.println("masukkan jumlah pemain yang akan di input pada tim " + (i+1) + ":");
			try{
				m = Integer.parseInt(input.nextLine());
			}catch(Exception e){
				System.out.println(e.getMessage());
			}
			String[] player = new String[m];
			System.out.println("masukkan nama pemain pada tim " + (i+1) + ":");
			for(int j = 0; j < m; j++)
			{
				try{
					player[j] = input.nextLine();
				}catch(Exception e){
					System.out.println(e.getMessage());
				}
			}
			
			teamList[i] = new soccerTeam(name, nation, year_founded, player);
		}

		for(i = 0; i < n; i++)
		{
			teamList[i].printTeam();
		}
	}
}