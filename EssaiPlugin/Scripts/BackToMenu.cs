using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.UI;

public class BackToMenu : MonoBehaviour {

    public Button BoutonBack;
    public GameObject MenuPrincipale;
    public GameObject Secteur1;
    public GameObject Secteur2;
    public GameObject Secteur3;
    public GameObject Secteur4;
    public GameObject Muscles;

    // Use this for initialization
    void Start()
    {

    }

    // Update is called once per frame
    void Update()
    {
        if (Input.GetMouseButtonUp(0))
        {
            BoutonBack.onClick.AddListener(Menu);
        }
    }

    void Menu()
    {
        MenuPrincipale.SetActive(true);
        Secteur1.SetActive(false);
        Secteur2.SetActive(false);
        Secteur3.SetActive(false);
        Secteur4.SetActive(false);
        Muscles.SetActive(true);

    }
}
