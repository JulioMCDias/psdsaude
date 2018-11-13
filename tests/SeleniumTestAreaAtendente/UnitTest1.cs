using System;
using System.Text;
using System.Text.RegularExpressions;
using System.Threading;
using Microsoft.VisualStudio.TestTools.UnitTesting;
using OpenQA.Selenium;
using OpenQA.Selenium.Firefox;
using OpenQA.Selenium.Chrome;
using OpenQA.Selenium.IE;
using OpenQA.Selenium.Support.UI;

namespace SeleniumTestAreaAtendente
{
    [TestClass]
    public class AreaDeAtendimento
    {
        private static IWebDriver driver;
        private StringBuilder verificationErrors;
        private static string baseURL;
        private bool acceptNextAlert = true;

        [ClassInitialize]
        public static void InitializeClass(TestContext testContext)
        {
            string browser = "Firefox";
            switch (browser)
            {
                case "Chrome":
                    driver = new ChromeDriver();
                    break;
                case "Firefox":
                    driver = new FirefoxDriver();
                    break;
                case "IE":
                    driver = new InternetExplorerDriver();
                    break;
                default:
                    driver = new ChromeDriver();
                    break;
            }
        }

        [ClassCleanup]
        public static void CleanupClass()
        {
            try
            {
                //driver.Quit();// quit does not close the window
                driver.Close();
                driver.Dispose();
            }
            catch (Exception)
            {
                // Ignore errors if unable to close the browser
            }
        }

        [TestInitialize]
        public void InitializeTest()
        {
            verificationErrors = new StringBuilder();
        }

        [TestCleanup]
        public void CleanupTest()
        {
            Assert.AreEqual("", verificationErrors.ToString());
        }

        [TestMethod]
        public void TheAreaDoAtendenteTest()
        {
            driver.Navigate().GoToUrl("http://psdsaude.azurewebsites.net/login.php");
            driver.FindElement(By.Id("email")).Click();
            driver.FindElement(By.Id("email")).Clear();
            driver.FindElement(By.Id("email")).SendKeys("fernanda@gmail.com");
            driver.FindElement(By.Id("senha")).Click();
            driver.FindElement(By.Id("senha")).Clear();
            driver.FindElement(By.Id("senha")).SendKeys("fernanda123");
            driver.FindElement(By.XPath("(.//*[normalize-space(text()) and normalize-space(.)='Senha'])[1]/following::button[1]")).Click();
            driver.Navigate().GoToUrl("http://psdsaude.azurewebsites.net/area_atendente.php");
            driver.FindElement(By.LinkText("Acessar")).Click();
            driver.FindElement(By.XPath("(.//*[normalize-space(text()) and normalize-space(.)='Pacientes'])[2]/following::strong[1]")).Click();
            driver.FindElement(By.XPath("(.//*[normalize-space(text()) and normalize-space(.)='Data de Nascimento:'])[1]/following::input[2]")).Click();
            driver.FindElement(By.Name("nome_paciente")).Click();
            driver.FindElement(By.Name("nome_paciente")).Clear();
            driver.FindElement(By.Name("nome_paciente")).SendKeys("Francisco");
            driver.FindElement(By.Name("idade")).Click();
            driver.FindElement(By.Name("idade")).Clear();
            driver.FindElement(By.Name("idade")).SendKeys("26");
            driver.FindElement(By.Name("num_carteira")).Click();
            driver.FindElement(By.Name("num_carteira")).Clear();
            driver.FindElement(By.Name("num_carteira")).SendKeys("26");
            driver.FindElement(By.XPath("(.//*[normalize-space(text()) and normalize-space(.)='Data de Nascimento:'])[1]/following::input[2]")).Click();
            driver.FindElement(By.Name("data_nasc")).Click();
            driver.FindElement(By.Name("data_nasc")).Clear();
            driver.FindElement(By.Name("data_nasc")).SendKeys("2018-11-12");
            driver.FindElement(By.XPath("(.//*[normalize-space(text()) and normalize-space(.)='Data de Nascimento:'])[1]/following::input[2]")).Click();
            driver.FindElement(By.LinkText("Área do Atendente")).Click();
            driver.FindElement(By.XPath("(.//*[normalize-space(text()) and normalize-space(.)='Cadastro de Vacinas'])[1]/following::a[1]")).Click();
            driver.FindElement(By.LinkText("Adicionar Vacina")).Click();
            driver.FindElement(By.Name("nome_vacina")).Click();
            driver.FindElement(By.Name("nome_vacina")).Clear();
            driver.FindElement(By.Name("nome_vacina")).SendKeys("HPV");
            driver.FindElement(By.Name("descricao")).Clear();
            driver.FindElement(By.Name("descricao")).SendKeys("vacina papilomavírus humano");
            driver.FindElement(By.XPath("(.//*[normalize-space(text()) and normalize-space(.)='Descrição:'])[1]/following::input[1]")).Click();
        }
        private bool IsElementPresent(By by)
        {
            try
            {
                driver.FindElement(by);
                return true;
            }
            catch (NoSuchElementException)
            {
                return false;
            }
        }

        private bool IsAlertPresent()
        {
            try
            {
                driver.SwitchTo().Alert();
                return true;
            }
            catch (NoAlertPresentException)
            {
                return false;
            }
        }

        private string CloseAlertAndGetItsText()
        {
            try
            {
                IAlert alert = driver.SwitchTo().Alert();
                string alertText = alert.Text;
                if (acceptNextAlert)
                {
                    alert.Accept();
                }
                else
                {
                    alert.Dismiss();
                }
                return alertText;
            }
            finally
            {
                acceptNextAlert = true;
            }
        }
    }
}

