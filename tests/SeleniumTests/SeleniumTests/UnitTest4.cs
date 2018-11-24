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

namespace TestDomiciliarEEmpresarial
{
    [TestClass]
    public class TestDomiciliarEEmpresarial
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
        public void TheDomiciliarEEmpresarialTest()
        {
            driver.Navigate().GoToUrl("http://psdsaude.azurewebsites.net/dev/vacinacao.php");
            driver.FindElement(By.LinkText("Agendar")).Click();
            driver.FindElement(By.Name("nome_responsavel")).Click();
            driver.FindElement(By.Name("nome_responsavel")).Clear();
            driver.FindElement(By.Name("nome_responsavel")).SendKeys("Francisco antnio");
            driver.FindElement(By.Name("pessoa_vacinada")).Click();
            driver.FindElement(By.Name("pessoa_vacinada")).Clear();
            driver.FindElement(By.Name("pessoa_vacinada")).SendKeys("teste");
            driver.FindElement(By.Name("vacinas_solicitadas")).Click();
            driver.FindElement(By.Name("vacinas_solicitadas")).Clear();
            driver.FindElement(By.Name("vacinas_solicitadas")).SendKeys("febre amarela e gripe");
            driver.FindElement(By.Name("email")).Click();
            driver.FindElement(By.Name("email")).Clear();
            driver.FindElement(By.Name("email")).SendKeys("francisco@yahoo.com");
            driver.FindElement(By.Name("data")).Click();
            driver.FindElement(By.XPath("(.//*[normalize-space(text()) and normalize-space(.)='E-mail:'])[1]/following::div[1]")).Click();
            driver.FindElement(By.Name("data")).Click();
            driver.FindElement(By.Name("data")).Clear();
            driver.FindElement(By.Name("data")).SendKeys("2018-10-10");
            driver.FindElement(By.Id("telefone")).Click();
            driver.FindElement(By.Id("telefone")).Click();
            driver.FindElement(By.Id("telefone")).Clear();
            driver.FindElement(By.Id("telefone")).SendKeys("(11)95622-3211");
            driver.FindElement(By.Name("endereco")).Click();
            driver.FindElement(By.Name("endereco")).Clear();
            driver.FindElement(By.Name("endereco")).SendKeys("rua teste");
            driver.FindElement(By.Name("cidade")).Click();
            driver.FindElement(By.Name("cidade")).Clear();
            driver.FindElement(By.Name("cidade")).SendKeys("teste");
            driver.FindElement(By.Id("cep")).Click();
            driver.FindElement(By.Id("cep")).Clear();
            driver.FindElement(By.Id("cep")).SendKeys("11112-33");
            driver.FindElement(By.XPath("(.//*[normalize-space(text()) and normalize-space(.)='*'])[9]/following::button[1]")).Click();
            driver.FindElement(By.XPath("(.//*[normalize-space(text()) and normalize-space(.)='*'])[9]/following::button[1]")).Click();
            driver.FindElement(By.LinkText("Vacinação")).Click();
            driver.FindElement(By.XPath("(.//*[normalize-space(text()) and normalize-space(.)='Vacinação Empresarial'])[1]/following::a[1]")).Click();
            driver.FindElement(By.Name("nome_contato")).Click();
            driver.FindElement(By.Name("nome_contato")).Clear();
            driver.FindElement(By.Name("nome_contato")).SendKeys("teste");
            driver.FindElement(By.Name("empresa")).Click();
            driver.FindElement(By.Name("empresa")).Clear();
            driver.FindElement(By.Name("empresa")).SendKeys("sesi");
            driver.FindElement(By.Name("cidade")).Click();
            driver.FindElement(By.Name("cidade")).Clear();
            driver.FindElement(By.Name("cidade")).SendKeys("teste");
            driver.FindElement(By.Id("uf")).Click();
            new SelectElement(driver.FindElement(By.Id("uf"))).SelectByText("Rio de Janeiro");
            driver.FindElement(By.Id("uf")).Click();
            driver.FindElement(By.Name("email")).Click();
            driver.FindElement(By.Name("email")).Clear();
            driver.FindElement(By.Name("email")).SendKeys("francisco@yahoo.com");
            driver.FindElement(By.Id("telefone")).Click();
            driver.FindElement(By.Id("telefone")).Clear();
            driver.FindElement(By.Id("telefone")).SendKeys("(11)95622-3211");
            driver.FindElement(By.Id("vacina_interesse")).Click();
            new SelectElement(driver.FindElement(By.Id("vacina_interesse"))).SelectByText("hepatite a+b ped");
            driver.FindElement(By.Id("vacina_interesse")).Click();
            driver.FindElement(By.Name("quantidade")).Click();
            driver.FindElement(By.Name("quantidade")).Clear();
            driver.FindElement(By.Name("quantidade")).SendKeys("1");
            driver.FindElement(By.Name("quantidade")).Click();
            driver.FindElement(By.Name("mensagem")).Click();
            driver.FindElement(By.Name("mensagem")).Click();
            driver.FindElement(By.Name("mensagem")).Clear();
            driver.FindElement(By.Name("mensagem")).SendKeys("bvngnghnhghmhgmh");
            driver.FindElement(By.XPath("(.//*[normalize-space(text()) and normalize-space(.)='*'])[9]/following::button[1]")).Click();
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
