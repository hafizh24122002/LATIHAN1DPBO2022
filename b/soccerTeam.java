public class soccerTeam
{
	private String name;
	private String nation;
	private int year_founded;
	private String[] player;

	public soccerTeam(String name, String nation, int year_founded, String[] player)
	{
		this.name = name;
		this.nation = nation;
		this.year_founded = year_founded;
		this.player = player;
	}

	public soccerTeam(){}

	public void setName(String name)
	{
		this.name = name;
	}

	public String getName()
	{
		return name;
	}

	public void setNation(String nation)
	{
		this.nation = nation;
	}

	public String getNation()
	{
		return nation;
	}

	public void setYear_founded(int year_founded)
	{
		this.year_founded = year_founded;
	}

	public int getYear_founded()
	{
		return year_founded;
	}

	public void setPlayer(String[] player)
	{
		this.player = player;
	}

	public String[] getPlayer()
	{
		return player;
	}

	public void printTeam()
	{
		System.out.println("\nNama tim : " + name);
		System.out.println("Negara asal tim : " + nation);
		System.out.println("Tahun berdiri : " + year_founded);
		System.out.println("Pemain :");
		for(String i: player)
		{
			System.out.println(" -> " + i);
		}
	}
}