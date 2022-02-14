#include "soccerTeam.cpp"

int main()
{
	cout << "Masukkan banyaknya tim yang akan di input: " << endl;
	int n;
	cin >> n;

	soccerTeam *teamList = new soccerTeam[n];

	int i, m, year_founded;
	string name, nation, buff;
	for(i = 0; i < n; i++)
	{
		cout << "masukkan nama tim " << (i+1) << ":" << endl;
		cin >> name;

		cout << "masukkan negara asal tim " << (i+1) << ":" << endl;
		cin >> nation;

		cout << "masukkan tahun berdiri tim " << (i+1) << ":" << endl;
		cin >> year_founded;
		
		cout << "masukkan jumlah pemain yang akan di input pada tim " << (i+1) << ":" << endl;
		cin >> m;

		cout << "masukkan nama pemain pada tim " << (i+1) << endl;
		vector<string> player;
		for(int j = 0; j < m; j++)
		{
			cin >> buff;
			player.push_back(buff);
		}

		teamList[i] = soccerTeam(name, nation, year_founded, player);
	}

	for(i = 0; i < n; i++)
	{
		teamList[i].printTeam();
	}
}