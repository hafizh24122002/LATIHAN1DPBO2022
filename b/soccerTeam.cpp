#include <string>
#include <vector>
#include <iostream>

using namespace std;

class soccerTeam
{
	private:
		string name;
		string nation;
		int year_founded;
		vector<string> player;

	public:
		// construct
		soccerTeam(string name, string nation, int year_founded, vector<string> player)
		{
			this->name = name;
			this->nation = nation;
			this->year_founded = year_founded;
			this->player = player;
		}

		// default construct
		soccerTeam(){}

		void setName(string name)
		{
			this->name = name;
		}

		string getName()
		{
			return name;
		}

		void setNation(string nation)
		{
			this->nation = nation;
		}

		string getNation()
		{
			return this->nation;
		}

		void setYear_founded(int Year_founded)
		{
			this->year_founded = year_founded;
		}

		int getYear_founded()
		{
			return this->year_founded;
		}

		void setPlayer(vector<string> player)
		{
			this->player = player;
		}

		vector<string> getPlayer()
		{
			return this->player;
		}

		// deconstruct
		~soccerTeam(){}

		void printTeam()
		{
			cout << "\nNama tim : " << this->name << endl;
			cout << "Negara asal tim : " << this->nation << endl;
			cout << "Tahun berdiri : " << this->year_founded << endl;
			cout << "Pemain :" << endl;
			for(string i: player)
			{
				cout << " -> " << i << endl;
			} 
		}
};